
# frozen_string_literal: true

require_dependency "keppler_booking/application_controller"
module KepplerBooking
  module Admin
    # ServicesRoomsController
    class ServicesRoomsController < ::Admin::AdminController
      layout 'keppler_booking/admin/layouts/application'
      before_action :set_services_room, only: %i[show edit update destroy]
      before_action :index_variables
      include ObjectQuery

      # GET /keppler_bookings
      def index
        respond_to_formats(@services_rooms)
        redirect_to_index(@objects)
      end

      # GET /keppler_bookings/1
      def show; end

      # GET /keppler_bookings/new
      def new
        @services_room = ServicesRoom.new
      end

      # GET /keppler_bookings/1/edit
      def edit; end

      # POST /keppler_bookings
      def create
        @services_room = ServicesRoom.new(services_room_params)

        if @services_room.save
          redirect(@services_room, params)
        else
          render :new
        end
      end

      # PATCH/PUT /keppler_bookings/1
      def update
        if @services_room.update(services_room_params)
          redirect(@services_room, params)
        else
          render :edit
        end
      end

      def clone
        @services_room = ServicesRoom.clone_record params[:services_room_id]
        @services_room.save
        redirect_to_index(@objects)
      end

      # DELETE /keppler_bookings/1
      def destroy
        @services_room.destroy
        redirect_to_index(@objects)
      end

      def destroy_multiple
        ServicesRoom.destroy redefine_ids(params[:multiple_ids])
        redirect_to_index(@objects)
      end

      def upload
        ServicesRoom.upload(params[:file])
        redirect_to_index(@objects)
      end

      def reload; end

      def sort
        ServicesRoom.sorter(params[:row])
      end

      private

      def index_variables
        @q = ServicesRoom.ransack(params[:q])
        @services_rooms = @q.result(distinct: true)
        @objects = @services_rooms.page(@current_page).order(position: :asc)
        @total = @services_rooms.size
        @attributes = ServicesRoom.index_attributes
      end

      # Use callbacks to share common setup or constraints between actions.
      def set_services_room
        @services_room = ServicesRoom.find(params[:id])
      end

      # Only allow a trusted parameter "white list" through.
      def services_room_params
        params.require(:services_room).permit(
          :name, :icon
        )
      end
    end
  end
end
