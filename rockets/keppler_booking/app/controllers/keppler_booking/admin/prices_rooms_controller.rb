
# frozen_string_literal: true

require_dependency "keppler_booking/application_controller"
module KepplerBooking
  module Admin
    # PricesRoomsController
    class PricesRoomsController < ::Admin::AdminController
      layout 'keppler_booking/admin/layouts/application'
      before_action :set_prices_room, only: %i[show edit update destroy]
      before_action :index_variables
      include ObjectQuery

      # GET /bookings
      def index
        respond_to_formats(@prices_rooms)
        redirect_to_index(@objects)
      end

      # GET /bookings/1
      def show; end

      # GET /bookings/new
      def new
        @prices_room = PricesRoom.new
      end

      # GET /bookings/1/edit
      def edit; end

      # POST /bookings
      def create
        @prices_room = PricesRoom.new(prices_room_params)

        if @prices_room.save
          redirect(@prices_room, params)
        else
          render :new
        end
      end

      # PATCH/PUT /bookings/1
      def update
        if @prices_room.update(prices_room_params)
          redirect(@prices_room, params)
        else
          render :edit
        end
      end

      def clone
        @prices_room = PricesRoom.clone_record params[:prices_room_id]
        @prices_room.save
        redirect_to_index(@objects)
      end

      # DELETE /bookings/1
      def destroy
        @prices_room.destroy
        redirect_to_index(@objects)
      end

      def destroy_multiple
        PricesRoom.destroy redefine_ids(params[:multiple_ids])
        redirect_to_index(@objects)
      end

      def upload
        PricesRoom.upload(params[:file])
        redirect_to_index(@objects)
      end

      def reload; end

      def sort
        PricesRoom.sorter(params[:row])
      end

      private

      def index_variables
        @q = PricesRoom.ransack(params[:q])
        @prices_rooms = @q.result(distinct: true)
        @objects = @prices_rooms.page(@current_page).order(position: :asc)
        @total = @prices_rooms.size
        @attributes = PricesRoom.index_attributes
      end

      # Use callbacks to share common setup or constraints between actions.
      def set_prices_room
        @prices_room = PricesRoom.find(params[:id])
      end

      # Only allow a trusted parameter "white list" through.
      def prices_room_params
        params.require(:prices_room).permit(
          :room_id, :price, :amount_people
        )
      end
    end
  end
end
