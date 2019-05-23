
# frozen_string_literal: true

require_dependency "keppler_booking/application_controller"
module KepplerBooking
  module Admin
    # RoomsController
    class RoomsController < ::Admin::AdminController
      layout 'keppler_booking/admin/layouts/application'
      before_action :set_room, only: %i[show edit update destroy]
      before_action :index_variables
      include ObjectQuery

      # GET /bookings
      def index
        respond_to_formats(@rooms)
        redirect_to_index(@objects)
      end

      # GET /bookings/1
      def show; end

      # GET /bookings/new
      def new
        @room = Room.new
      end

      # GET /bookings/1/edit
      def edit; end

      # POST /bookings
      def create
        @room = Room.new(room_params)

        if @room.save
          redirect(@room, params)
        else
          render :new
        end
      end

      # PATCH/PUT /bookings/1
      def update
        if @room.update(room_params)
          redirect(@room, params)
        else
          render :edit
        end
      end

      def clone
        @room = Room.clone_record params[:room_id]
        @room.save
        redirect_to_index(@objects)
      end

      # DELETE /bookings/1
      def destroy
        @room.destroy
        redirect_to_index(@objects)
      end

      def destroy_multiple
        Room.destroy redefine_ids(params[:multiple_ids])
        redirect_to_index(@objects)
      end

      def upload
        Room.upload(params[:file])
        redirect_to_index(@objects)
      end

      def reload; end

      def sort
        Room.sorter(params[:row])
      end

      private

      def index_variables
        @q = Room.ransack(params[:q])
        @rooms = @q.result(distinct: true)
        @objects = @rooms.page(@current_page).order(position: :asc)
        @total = @rooms.size
        @attributes = Room.index_attributes
      end

      # Use callbacks to share common setup or constraints between actions.
      def set_room
        @room = Room.find(params[:id])
      end

      # Only allow a trusted parameter "white list" through.
      def room_params
        params.require(:room).permit(
          :name, :description_small, :description_big, :note, :cover, :permalink, :air_conditioner, :tv, :refrigerator, :bathroom, :carpet, :phone, :lock, :closet, :table, :internet, :public, :room_service, :breakfast, images_attributes: [:id, :img, :_destroy], prices_rooms_attributes: [:id, :price, :amount_people, :_destroy]
        )
      end
    end
  end
end
